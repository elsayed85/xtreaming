val domain = encodeToString(
                (uri.scheme + "://" + uri.host + ":443").encodeToByteArray(),
                0
            ).replace("\n", "").replace("=", ".")
