1. mysql server enable ssl

    ```shell
    mysql> SHOW VARIABLES LIKE 'have_ssl';
    +---------------+----------+
    | Variable_name | Value    |
    +---------------+----------+
    | have_ssl      | DISABLED |
    +---------------+----------+
    
    sudo vi /etc/mysql/mysql.conf.d/mysqld.cnf
    
    ssl=1
    
    sudo systemctl restart mysql.service
    
    mysql> SHOW VARIABLES LIKE 'have_ssl';
    +---------------+-------+
    | Variable_name | Value |
    +---------------+-------+
    | have_ssl      | YES   |
    +---------------+-------+
    ```

    

2. mysqli_change_user to invalid username password report error

    ​	`[2013] Lost connection to MySQL server during query`

    ​	OR

    ​	`[2006] MySQL server has gone away`

    @see mysqli_change_user_new.phpt

3. mysql_stmt_reset clears buffered results, @see bug62046.phpt

    ```c
    // gcc -Wall a.c -lmysqlclient
    
    #include <mysql/mysql.h>
    #include <stdio.h>
    #include <stdlib.h>
    #include <string.h>
    
    int main(int argc, char ** argv) {
        MYSQL * mysql = mysql_init(NULL);
    
        if (mysql == NULL) {
            fprintf(stderr, "mysql_init() failed\n");
            exit(1);
        }
    
        if (mysql_real_connect(mysql, "localhost", "rootpw", "123456",
                "test", 0, NULL, 0) == NULL) {
            fprintf(stderr, "%s\n", mysql_error(mysql));
            mysql_close(mysql);
            exit(1);
        }
    
    #define STRING_SIZE 50
    #define SELECT_SAMPLE "SELECT 42"
    
        MYSQL_STMT * stmt;
        MYSQL_BIND bind[1];
        unsigned long length[1];
        int int_data;
        my_bool is_null[1];
        my_bool error[1];
    
        /* Prepare a SELECT query to fetch data from test_table */
        stmt = mysql_stmt_init(mysql);
        if (!stmt) {
            fprintf(stderr, " mysql_stmt_init(), out of memory\n");
            exit(0);
        }
        if (mysql_stmt_prepare(stmt, SELECT_SAMPLE, sizeof(SELECT_SAMPLE) - 1)) {
            fprintf(stderr, " mysql_stmt_prepare(), SELECT failed\n");
            fprintf(stderr, " %s\n", mysql_stmt_error(stmt));
            exit(0);
        }
        fprintf(stdout, " prepare, SELECT successful\n");
    
        /* Execute the SELECT query */
        if (mysql_stmt_execute(stmt)) {
            fprintf(stderr, " mysql_stmt_execute(), failed\n");
            fprintf(stderr, " %s\n", mysql_stmt_error(stmt));
            exit(0);
        }
    
        /* Now buffer all results to client (optional step) */
        if (mysql_stmt_store_result(stmt)) {
            fprintf(stderr, " mysql_stmt_store_result() failed\n");
            fprintf(stderr, " %s\n", mysql_stmt_error(stmt));
            exit(0);
        }
    
        /* Bind the result buffers for all 4 columns before fetching them */
    
        memset(bind, 0, sizeof(bind));
    
        /* INTEGER COLUMN */
        bind[0].buffer_type = MYSQL_TYPE_LONG;
        bind[0].buffer = (char * ) & int_data;
        bind[0].is_null = & is_null[0];
        bind[0].length = & length[0];
        bind[0].error = & error[0];
    
        /* Bind the result buffers */
        if (mysql_stmt_bind_result(stmt, bind)) {
            fprintf(stderr, " mysql_stmt_bind_result() failed\n");
            fprintf(stderr, " %s\n", mysql_stmt_error(stmt));
            exit(0);
        }
    
        if (argc > 1) {
            if (mysql_stmt_reset(stmt)) {
                fprintf(stderr, " mysql_stmt_reset() failed\n");
                fprintf(stderr, " %s\n", mysql_stmt_error(stmt));
                exit(0);
            }
        }
    
        /* Fetch all rows */
        fprintf(stdout, "Fetching results ...\n");
        while (!mysql_stmt_fetch(stmt)) {
            /* column 1 */
            fprintf(stdout, "   column1 (integer)  : ");
            if (is_null[0])
                fprintf(stdout, " NULL\n");
            else
                fprintf(stdout, " %d(%ld)\n", int_data, length[0]);
        }
    
        /* Close the statement */
        if (mysql_stmt_close(stmt)) {
            /* mysql_stmt_close() invalidates stmt, so call          */
            /* mysql_error(mysql) rather than mysql_stmt_error(stmt) */
            fprintf(stderr, " failed while closing the statement\n");
            fprintf(stderr, " %s\n", mysql_error(mysql));
            exit(0);
        }
    
        mysql_close(mysql);
    
        exit(0);
    }
    ```

    