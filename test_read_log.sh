#!/bin/sh

#######SETUP ACCESS LOG FILE ############

LOG_FOLDER=/var/log/httpd
ACCESS_LOG=$LOG_FOLDER/vagrant-codeigniter-access_log

###### SETUP RESULT FILE#################
RESULT_FOLDER=/vagrant
RESULT_LOG=$RESULT_FOLDER/result.txt


###### #SETUP ACCESS LOG FILE BY DATE ###
ACCESS_LOG_DATE=$RESULT_FOLDER/access_log_date.txt


######CHECK INPUT ##############
str="$1"

if [ "$#" == 0  ]; then
    echo "Please input a parameter"
    exit 1
fi

if [ "$#" -gt 1  ]; then
    echo "You have inputted so many parameters, try again, please!"
    exit 1
fi

if [ ${#str} != 8 ]; then
    echo "Please input a date with 8 characters <yyyymmdd> !"
    exit 1
fi

echo $1 | grep "^[0-2][0-9]*$"

if [ $? != "0" ];
then
  echo "Please input a date <yyyymmdd> !"
  exit 1
fi

year=${str:0:4}

temp=${str:4:1}
if [ $temp -eq 0 ]          #check month < 10 ???
then
month=${str:5:1}            #month < 10
else
month=${str:4:2}            #month >=10
fi

#month=`echo $month|sed 's/^0*//'`
day=${str:6:2}

#set month names
months=(Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec)
monthname="${months[$month-1]}"
date=($day"/"$monthname"/"$year)
echo "$date"
grep $date $ACCESS_LOG > $ACCESS_LOG_DATE


####### Count number of occurrences access system #######

result=`awk -F\" '{print $2,1}' $ACCESS_LOG_DATE | awk '{a[$2]++;b[$2]=b[$s2]+$s4}END{for(i in a) print i,a[i]}'| sort -nr -k2`
echo "$result" > $RESULT_LOG   

######## Delete keyword : phpmyadmin or favico.ico #####

perl -pi -e 'undef $_ if /phpmyadmin/' $RESULT_LOG
perl -pi -e 'undef $_ if /favicon.ico/' $RESULT_LOG
perl -pi -e 'undef $_ if s/$*.jpg//g' $RESULT_LOG
perl -pi -e 'undef $_ if s/$*.css//g' $RESULT_LOG
perl -pi -e 'undef $_ if s/$*.js//g' $RESULT_LOG

count=0
cat $RESULT_LOG | while read LINE
do
        let count++
        echo "$count, $LINE"
done
