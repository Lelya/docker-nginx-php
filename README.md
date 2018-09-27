# Nginx PHP

Docker с Nginx, PHP-FPM

## Копирование проекта

  Установите [Git](http://git-scm.com/book/en/v2/Getting-Started-Installing-Git), загрузите репозиторий локально

  ```sh
  git clone https://github.com/Lelya/docker-nginx-php.git
  ```

  Перейдите в папку проекта:

  ```sh
  cd docker-nginx-php
  ```

##  Дерево проекта

```sh
.
├── code
│   └── datafiles
│       ├── 12gfdf.ixt
│       ├── ----.ixt
│       ├── aaaa545.ixt
│       └── ffftry53grgf.ixt
│   └── index.php
└── README.md
└── docker-compose.yml
└── site.conf
```

## Запуск приложения

1. Выполните

    ```sh
    sudo docker-compose up -d
    ```

    **Это может занять несколько минут, пока подгрузятся все зависимости**

    ```sh
    sudo docker-compose logs -f # Follow log output
    ```

3. Откройте в браузере:

     * [http://localhost:8000](http://localhost:8000/)

 4. Остановка и очистка сервисов

     ```sh
     sudo docker-compose down -v
     ```

