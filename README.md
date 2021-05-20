# Passed Tests

- [x] ext/date
- [x] ext/pcre
- [x] ext/mbstring

# Requirements

1. php7.2

    ```shell
    $ sudo apt install php7.2-cli
    ```

2. pcc

    ```shell
    $ pcc
    ```

# Usage examples

## 1. run single phpt test

```shell
$ BPC_AUTO_RUN=TRUE TEST_PHP_EXECUTABLE=/usr/local/bin/pcc php run-tests.php ext/pcre/tests/001.phpt
```

## 2. run multiple phpt tests

```shell
$ find ./Zend/ -name 'exception*.phpt' > /tmp/tests.list
$ BPC_AUTO_RUN=TRUE TEST_PHP_EXECUTABLE=/usr/local/bin/pcc php run-tests.php -r /tmp/tests.list
```

## 3. run single dir tests

```shell
$ BPC_AUTO_RUN=TRUE TEST_PHP_EXECUTABLE=/usr/local/bin/pcc php run-tests.php ext/pcre
```

## 4. run multiple dirs tests

```shell
$ BPC_AUTO_RUN=TRUE TEST_PHP_EXECUTABLE=/usr/local/bin/pcc php run-tests.php ext/date ext/mbstring
```

## 5. save failed tests to file

```shell
$ BPC_AUTO_RUN=TRUE TEST_PHP_EXECUTABLE=/usr/local/bin/pcc php run-tests.php -w ~/failed.tests ext/date
```

