"use strict";

// console.log('KIPK-Service Worker: executing.');

var version = 'v1.3a::';
var offlinePage = [
  '/connection-error.html',
  '/offline.html',
  '/img/logo.png',
  '/img/bg-hexa3.jpg'
];

self.addEventListener("install", function(event) {
  // console.log('KIPK-Service Worker: install event in progress.');
  event.waitUntil(
    caches
      .open(version + 'fundamentals')
      .then(function(cache) {
        return cache.addAll(offlinePage);
      })
      .then(function() {
        console.log('KIPK-Service Worker: install completed');
      })
  );
});
self.addEventListener("fetch", function(event) {
  // console.log('KIPK-Service Worker: fetch event in progress.');
  if (event.request.method !== 'GET') {
    // console.log('KIPK-Service Worker: fetch event ignored.', event.request.method, event.request.url);
    return;
  }

  event.respondWith(
    caches
      .match(event.request)
      .then(function(cached) {
        var networked = fetch(event.request)
          // We handle the network request with success and failure scenarios.
          .then(fetchedFromNetwork, unableToResolve)
          // We should catch errors on the fetchedFromNetwork handler as well.
          .catch(fetchError);
        // console.log('KIPK-Service Worker: fetch event', cached ? '(cached)' : '(network)', event.request.url);
        return cached || networked;

        function fetchedFromNetwork(response) {
          const url = event.request.url;
          const origin = location.origin+"/";
          if(url != origin && !url.includes("sim") && !url.includes("siswa")){
            var cacheCopy = response.clone();
            // console.log('KIPK-Service Worker: fetch response from network.', event.request.url);
            caches
              .open(version + 'pages')
              .then(function add(cache) {
                if (!/^https?:$/i.test(event.request.url.protocol)) return;
                return cache.put(event.request, cacheCopy);
              });
          }
          return response;
        }

        function unableToResolve () {
          // console.log('KIPK-Service Worker: fetch request failed in both cache and network.');
          if(event.request.mode == "navigate") {
            if(navigator.onLine)
             return caches.match("/connection-error.html");
            else
              return caches.match("/offline.html");
          } else {
            return new Response(JSON.stringify({
              "status": false,
              "message": "Offline!"
            }), {
              "headers": {
                "Content-Type": "application/json"
              }
            });
          }
        }

        function fetchError () {
          // console.log('KIPK-Service Worker: fetch request failed in both cache and network.');
          var text = "Terjadi kesalahan saat memuat data. Mohon untuk mencoba reload halaman. <br/>\
                      Jika halaman ini masih tetap muncul, ada kemungkinan terdapat masalah pada sistem."
          return new Response('<h1>Gagal Memuat Data</h1>', {
            status: 503,
            statusText: text,
            headers: new Headers({
              'Content-Type': 'text/html'
            })
          });
        }

      })
  );
});

self.addEventListener("activate", function(event) {
  // console.log('KIPK-Service Worker: activate event in progress.');
  event.waitUntil(
    caches
      .keys()
      .then(function (keys) {
        return Promise.all(
          keys
            .filter(function (key) {
              return !key.startsWith(version);
            })
            .map(function (key) {
              return caches.delete(key);
            })
        );
      })
      .then(function() {
        console.log('KIPK-Service Worker: activate completed.');
      })
  );
});
