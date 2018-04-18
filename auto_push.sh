#!/bin/bash

cd /data/www/gitTest01/gitTest01

git checkout my
git add .
git commit -a -m 'init'
git checkout develop
git merge my
git push origin develop
git checkout my
ehco '提交成功'

