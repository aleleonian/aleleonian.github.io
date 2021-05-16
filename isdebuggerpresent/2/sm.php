<?php 
header('Set-Cookie: DevTools=True; SameSite=Strict; Secure');
// setcookie("DevTools", "True", time()+(7*24*3600), "/; SameSite=None; Secure");
// setcookie("DevTools", "True");
?>{
  "version": 3,
  "sources": [
    "isXml.js"
  ],
  "names": [
    "removeMimeParameters",
    "mimeType",
    "replace",
    "isXml",
    "content",
    "xhr",
    "rawContentType",
    "headers",
    "getResponseHeader",
    "contentType",
    "toLowerCase",
    "test",
    "module",
    "exports"
  ],
  "mappings": "AAAA;;;;;;AAMA,SAASA,oBAAT",
  "sourcesContent": [
    "/**\n * Remove parameters like `charset=utf-8` from the end of a mime type string.\n *\n * "
  ]
}