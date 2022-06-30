# Hawking School Homework #10

Папка с моделями: https://github.com/AnnaBel05/hawking_hw9/tree/master_new/app/Models 

Папка с контроллерами: https://github.com/AnnaBel05/hawking_hw9/tree/master_new/app/Http/Controllers

Папка с представлениями: https://github.com/AnnaBel05/hawking_hw9/tree/master_new/resources/views

Маршруты: https://github.com/AnnaBel05/hawking_hw9/blob/master_new/routes/web.php

Посредники: https://github.com/AnnaBel05/hawking_hw9/tree/master_new/app/Http/Middleware

1. Устанавливаем Laravel Passport

![Screenshot from 2022-06-30 13-15-11](https://user-images.githubusercontent.com/79002614/176692307-e297f968-5e78-4375-b154-5f38e34a5388.png)

2. Прописываем в файле .env данные нашей БД.

3. Создаем модель Character

![Screenshot from 2022-06-30 13-28-44](https://user-images.githubusercontent.com/79002614/176693545-124ccaab-5803-401c-9450-dec6621ada0b.png)

4. Изменяем модель, указываем нужные нам поля в миграции

![image](https://user-images.githubusercontent.com/79002614/176693730-5ae93015-fd57-4d1e-b94c-b5c85d566e3d.png)

5. Выполняем команду php artisan migrate

![Screenshot from 2022-06-30 13-35-42](https://user-images.githubusercontent.com/79002614/176693881-00961e5b-4554-49ad-9d49-5a97eb38b82f.png)

6. Создаем посредника, который будет проверять поле формы на пустоту

![Screenshot from 2022-06-30 13-44-14](https://user-images.githubusercontent.com/79002614/176694177-c1ffaa83-c3b1-4431-9bd7-38379a7ade06.png)

![Screenshot from 2022-06-30 14-44-42](https://user-images.githubusercontent.com/79002614/176695159-3f01fc8d-d5ba-4e1e-b165-57d11981988d.png)

7. Создаем контроллер для модели Character

![Screenshot from 2022-06-30 13-54-28](https://user-images.githubusercontent.com/79002614/176694247-35b4b69f-1eeb-423c-a097-c5d8cfa643ab.png)

8. Создаем add-character-form.blade.php

![image](https://user-images.githubusercontent.com/79002614/176694823-21e45710-e60b-4da5-9276-148beb197531.png)

9. Прописываем маршруты

![Screenshot from 2022-06-30 14-41-07](https://user-images.githubusercontent.com/79002614/176695051-782ba9c9-6411-4140-9f98-dd9d75c217da.png)

10. Запускаем сервер с помощью команды php artisan serve

![Screenshot from 2022-06-30 14-16-10](https://user-images.githubusercontent.com/79002614/176694915-cf1a4b59-0d00-4cc8-b9a2-dc62f18ca1a3.png)

11. Пробуем отправить форму с пустыми полями

![Screenshot from 2022-06-30 14-45-25](https://user-images.githubusercontent.com/79002614/176695271-114a22c5-666f-4707-92ad-586318906b2d.png)


12. Обновляем главную страницу так, чтобы она содержала пути на остальные страницы

![Screenshot from 2022-06-30 15-33-30](https://user-images.githubusercontent.com/79002614/176695402-9f2e4d56-f527-4bd3-b0c8-8581276e0b33.png)

13. Добавляем страницы просмотра информации о всех записях

![Screenshot from 2022-06-30 15-33-44](https://user-images.githubusercontent.com/79002614/176695820-ba313da1-32d9-460d-acfa-f432b166d7f8.png)

14. И страницу просмотра одной записи

![Screenshot from 2022-06-30 15-33-48](https://user-images.githubusercontent.com/79002614/176695876-5a717ae4-c685-4e69-9547-d1b36d1aa165.png)

15. Создаем еще одного посредника, который будет перенаправлять нас на страницу просмотра информации о персонаже (по передаваемому id)

![image](https://user-images.githubusercontent.com/79002614/176696168-a4e72c33-54b8-405d-a992-6cd899e405dd.png)

16. Подключаем его к маршрутам

![image](https://user-images.githubusercontent.com/79002614/176696381-d344fb8e-a5cd-4897-b5aa-a2051915233d.png)

17. На странице просмотра указываем ссылку на представление, с которого идет редирект (см. 15й пункт)

![image](https://user-images.githubusercontent.com/79002614/176696670-8fa997e6-251f-41de-916a-6fc386ca1cfd.png)

Мной было немного изменено задание - не вывод передаваемого параметра, а вывод информации из БД по параметру. Надеюсь, это не сильно влияет.

# Hawking School Homework #9

1. Создаем проект ларавель в папке project-laravel

![image](https://user-images.githubusercontent.com/79002614/174636483-78e3e5e8-4dd4-45a9-b75d-8b6c9ca72fca.png)

1.1. Завершение процесса создания проекта.

![image](https://user-images.githubusercontent.com/79002614/174636666-d16d5aba-7df1-4810-bc0c-c2bd1476b62a.png)

2. Переходим в папку проекта и проверяем версию Artisan. Проект успешно сгенерирован, так что консоль выводит нам следующее:

![image](https://user-images.githubusercontent.com/79002614/174636907-7ce178d5-12dc-47a9-91b8-732c0b6733ca.png)

3. Запускаем локальный сервер разработки командой php artisan serve

![image](https://user-images.githubusercontent.com/79002614/174637052-ba590e2d-2634-494c-9506-01a5c28d3866.png)

![image](https://user-images.githubusercontent.com/79002614/174637108-7ebbfb29-bf71-4959-935e-0007271d4500.png)

4. Останавливаем сервер. Меняем главную страницу на Hello World. Для этого переходим в папку recources/views и создаем файл helloworld.blade.php

![image](https://user-images.githubusercontent.com/79002614/174637312-55e0b8a8-0447-42c8-8f92-e2d70a775344.png)

5. Пишем в нём простейший код, выводящий Hello World

![image](https://user-images.githubusercontent.com/79002614/174637471-6e24bfb4-4df2-49bc-be1f-cca0455f2526.png)

6. Меняем маршрут в routes/web.php с return view('welcome') на return view('helloworld') 

![image](https://user-images.githubusercontent.com/79002614/174637734-4c4049d6-77a5-415d-9657-b45a42c54ccc.png)

![image](https://user-images.githubusercontent.com/79002614/174637765-1273f2e1-042c-4235-9fcd-6087caef857d.png)

7. Снова запускаем сервер

![image](https://user-images.githubusercontent.com/79002614/174637956-47075b7f-cc8f-4998-93c6-ec40ff893131.png)

8. Вывод запросов к серверу в консоль

![image](https://user-images.githubusercontent.com/79002614/174638064-99616f48-58f9-445d-a005-b9726b1e92ff.png)

9. Общая структура проекта

![image](https://user-images.githubusercontent.com/79002614/174638112-14692bef-22e3-4837-98d3-0e622f24d87d.png)
