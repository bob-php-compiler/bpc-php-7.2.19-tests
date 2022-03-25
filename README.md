# Passed Tests

- [x] tests
- [x] Zend
- [x] ext/standard
- [x] ext/posix
- [x] ext/date
- [x] ext/pcre
- [x] ext/mbstring
- [x] ext/json
- [x] ext/fileinfo
- [x] ext/session
- [x] bpc

# Requirements

1. php7.2

    ```shell
    $ sudo apt install php7.2-cli
    ```

2. bpc

    ```shell
    $ bpc
    ```

# Usage examples

## 1. run single phpt test

```shell
$ BPC_AUTO_RUN=TRUE TEST_PHP_EXECUTABLE=/usr/local/bin/bpc TEST_PHP_CGI_EXECUTABLE=/usr/local/bin/bpc php run-tests.php ext/pcre/tests/001.phpt
```

## 2. run multiple phpt tests

```shell
$ find ./Zend/ -name 'exception*.phpt' > /tmp/tests.list
$ BPC_AUTO_RUN=TRUE TEST_PHP_EXECUTABLE=/usr/local/bin/bpc TEST_PHP_CGI_EXECUTABLE=/usr/local/bin/bpc php run-tests.php -r /tmp/tests.list
```

## 3. run single dir tests

```shell
$ BPC_AUTO_RUN=TRUE TEST_PHP_EXECUTABLE=/usr/local/bin/bpc TEST_PHP_CGI_EXECUTABLE=/usr/local/bin/bpc php run-tests.php ext/pcre
```

## 4. run multiple dirs tests

```shell
$ BPC_AUTO_RUN=TRUE TEST_PHP_EXECUTABLE=/usr/local/bin/bpc TEST_PHP_CGI_EXECUTABLE=/usr/local/bin/bpc php run-tests.php ext/date ext/mbstring
```

## 5. save failed tests to file

```shell
$ BPC_AUTO_RUN=TRUE TEST_PHP_EXECUTABLE=/usr/local/bin/bpc TEST_PHP_CGI_EXECUTABLE=/usr/local/bin/bpc php run-tests.php -w ~/failed.tests ext/date
```

## 6. run with licensing

```shell
BPC_SERVER_SIGNATURE="SERVER_SIGNATURE_OUTPUT" BPC_EXPIRED_DATE=YYYY-MM-DD BPC_FIXED_TIME=9 BPC_MIN_CHECKS=3 BPC_AUTO_RUN=TRUE TEST_PHP_EXECUTABLE=/usr/local/bin/bpc TEST_PHP_CGI_EXECUTABLE=/usr/local/bin/bpc php run-tests.php tests
```

## 7. static link

```shell
$ BPC_STATIC=TRUE BPC_AUTO_RUN=TRUE TEST_PHP_EXECUTABLE=/usr/local/bin/bpc TEST_PHP_CGI_EXECUTABLE=/usr/local/bin/bpc php run-tests.php ext/pcre
```
