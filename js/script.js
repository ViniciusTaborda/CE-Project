$(document).ready(function(){


    var myBitArray = sjcl.hash.sha256.hash("password");
    var myHash = sjcl.codec.hex.fromBits(sjcl.hash.sha256.hash("password"));

});