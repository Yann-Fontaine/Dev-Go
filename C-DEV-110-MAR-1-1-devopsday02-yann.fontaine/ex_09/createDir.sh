i=1

while ((i<=$1)); do
    if ((i<10)); then
	mkdir -p ex_0$i
	((i+=1))
    else
	mkdir -p ex_$i
	((i+=1))
	fi
done
