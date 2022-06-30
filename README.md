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
