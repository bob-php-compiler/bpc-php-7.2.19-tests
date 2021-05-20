#!/bin/bash

[[ "$1" == "" || "$2" == "" ]] && {
    echo "Usage: ./collect-php-tests.sh /path/to/php-src /path/to/tests-dir"
    exit
}

echo "@@@@@ WARNING !!! @@@@@@"
echo
echo "This scripts will mv tests directories"
echo
echo $1 " => " $2
echo
echo "Press any key to continue"
echo
echo "@@@@@@@@@@@@@@@@@@@@@@@@"

read GO

mkdir -p $2

for dir in `find $1 -type d -name tests`
do
    SRC_DIR=`dirname ${dir#$1}`
    DST_DIR=$2/$SRC_DIR
    mkdir -p $DST_DIR
    mv -v $dir $DST_DIR
done
mv -v $1/run-tests.php $2
