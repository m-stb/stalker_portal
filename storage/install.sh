#!/bin/bash


BASEDIR="$0"
BASEDIR="${BASEDIR%/*}"
BASEDIR=`cd $BASEDIR; pwd`

touch .tasks
chmod 666 .tasks

IS_UPSTART=$(test -x /sbin/initctl && /sbin/initctl --version | grep -q upstart && dpkg --compare-versions $(lsb_release -r -s) "lt" "15.0" || echo 1)

if [[ ${IS_UPSTART} -eq 0 ]]; then
    # upstart
    sed "s%@STORAGE_PATH@%$BASEDIR%" ./src/tvarchivetasks.conf > /etc/init/tvarchivetasks.conf
    start tvarchivetasks
else
    # systemd
    sed "s%@STORAGE_PATH@%$BASEDIR%" ./src/tvarchivetasks.service > /etc/systemd/system/tvarchivetasks.service
    systemctl enable tvarchivetasks.service
    systemctl stop tvarchivetasks.service
    systemctl start tvarchivetasks.service >/dev/null &
fi
