<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <script src="{{ asset('xtreaming/js/crypto-js.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.5/axios.min.js"></script>
    <script>
        movieInfo = {
            title: 'The Matrix',
            year: '1999',
            tmdb: '603',
            type: 'movie'
        };

        iv = 'wEiphTn!';
        key = '123d6cedf626dy54233aa1w6';
        appKey = "moviebox";
        appId = 'com.tdo.showbox';
        api = 'https://showbox.shegu.net/api/api_client/index/';
        headers_1 = {
            Platform: 'android',
            Accept: 'charset=utf-8',
            // 'User-Agent': 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36',
            'Content-Type': 'application/x-www-form-urlencoded',
            Refrer : 'https://showbox.shegu.net/',
        };

        const axiosConfig = {
            headers: headers_1,
            credentials: "same-origin"
        };

        encrypt_1 = function(message) {
            var keyHex = CryptoJS.enc.Utf8.parse(key);
            var ivHex = CryptoJS.enc.Utf8.parse(iv);
            var encrypted = CryptoJS.TripleDES.encrypt(message, keyHex, {
                iv: ivHex,
                mode: CryptoJS.mode.CBC,
                padding: CryptoJS.pad.Pkcs7
            });
            var data = encrypted.ciphertext.toString(CryptoJS.enc.Base64);
            return data;
        };
        md5_1 = function(str) {
            return CryptoJS.MD5(str).toString();
        };
        getVerify_1 = function(str, str2, str3) {
            if (str) {
                return md5_1(md5_1(str2) + str3 + str);
            }
            return null;
        };

        makeid = function(length) {
            var result = '';
            var characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for (var i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() *
                    charactersLength));
            }
            return result;
        }

        randomString_1 = makeid(32);
        getExpiryDate = function() {
            return (Math.floor(Date.now() / 1000)) + 60 * 60 * 12;
        };

        queryAPI = function(query) {
            var encryptedQuery, appKeyHash, newBody, words, base64, data, parseData;
            encryptedQuery = encrypt_1(query);
            appKeyHash = md5_1(appKey);
            newBody = "{\"app_key\":\"".concat(appKeyHash, "\",\"verify\": \"").concat(
                    getVerify_1(encryptedQuery, appKey, key), "\",\"encrypt_data\":\"")
                .concat(encryptedQuery, "\"}");
            words = CryptoJS.enc.Utf8.parse(newBody);
            base64 = CryptoJS.enc.Base64.stringify(words);
            data = {
                "data": base64,
                "appid": "27",
                "platform": "android",
                "version": "129",
                "medium": "Website&token".concat(randomString_1)
            };
            // send post request
            axios.post(api, data, axiosConfig)
                .then(function(response) {
                    parseData = JSON.parse(response.data);
                    console.log(parseData);
                })
                .catch(function(error) {
                    console.log(error);
                });
        };

        searchQuery = "{\"childmode\":\"1\",\"app_version\":\"11.5\",\"appid\":\"".concat(appId,
            "\",\"module\":\"Search3\",\"channel\":\"Website\",\"page\":\"1\",\"lang\":\"en\",\"type\":\"all\",\"keyword\":\""
        ).concat(movieInfo.title, "\",\"pagelimit\":\"20\",\"expired_date\":\"").concat(getExpiryDate(),
            "\",\"platform\":\"android\"}");
        queryAPI(searchQuery);
    </script>
</body>

</html>
