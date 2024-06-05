# 【重要】MySQLのバージョン指定
FROM mysql:8.0

# 【重要】環境変数 DB接続の際に必要になる
ENV MYSQL_DATABASE=development \
MYSQL_USER=student \
MYSQL_PASSWORD=secret \
MYSQL_ROOT_PASSWORD=secret \
TZ=Asia/Tokyo

# my.cnfをこちらで用意したものに差し替える
COPY ./my.cnf /etc/mysql/conf.d/my.cnf

# 権限が大きすぎるとエラーになるので最低限に設定
RUN chmod 644 /etc/mysql/conf.d/my.cnf
