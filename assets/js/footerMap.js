(function () {
    var setting = {"query":"Avenida da Liberdade, 899 - Liberdade, São Paulo - State of São Paulo, Brazil","width":300,"height":200,"satellite":false,"zoom":12,"placeId":"ChIJi9nxv6VZzpQRmTpKInfOmbo","cid":"0xba99ce77224a3a99","coords":[-23.5607673,-46.63771339999999],"lang":"en","queryString":"Avenida da Liberdade, 899 - Liberdade, São Paulo - State of São Paulo, Brazil","centerCoord":[-23.5607673,-46.63771339999999],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"996185"};
    var d = document;
    var s = d.createElement('script');
    s.src = 'https://1map.com/js/script-for-user.js?embed_id=996185';
    s.async = true;
    s.onload = function (e) {
    window.OneMap.initMap(setting)
    };
    var to = d.getElementsByTagName('script')[0];
    to.parentNode.insertBefore(s, to);
})();