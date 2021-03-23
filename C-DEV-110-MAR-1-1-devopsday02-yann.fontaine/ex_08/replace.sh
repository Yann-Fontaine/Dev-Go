file=$1
subword=$2
neword=$3
sed -i "s/$subword/$neword/g" $file
