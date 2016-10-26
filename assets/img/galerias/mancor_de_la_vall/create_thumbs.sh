#!/bin/bash
FILES="$@"
for i in $FILES
do
echo "Processing image $i ..."
/usr/bin/convert -thumbnail 366 $i ./thumbs/$i
done
