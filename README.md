# Hawking School Homework #20

Задание:

1. Подключение и конфигурирование Laravel Passport (базово)

2. Создание регистрации и авторизации с ролями пользователей

3. Подключение 1 соц. сети или более к написанному механизму регистрации/авторизации

4. В рамках вышеперечисленных заданий использовать сессию (не обязательно во всех
заданиях)

Ход работы:

1. Выполняем настройку Laravel Passport согласно указаниям в презентации

2. Создаем LoginController

![Screenshot from 2022-08-01 19-11-32](https://user-images.githubusercontent.com/79002614/182201786-1a6c11d8-a37d-4943-bc54-7853c7b71a9e.png)

![image](https://user-images.githubusercontent.com/79002614/182201891-487a488f-9128-4af4-a647-1cfaa83a1538.png)

3. Создаем следующие модели и миграции

![Screenshot from 2022-08-01 19-32-54](https://user-images.githubusercontent.com/79002614/182201932-e1bcf815-f13d-4d88-86b8-f071ee4fffc9.png)

![Screenshot from 2022-08-01 19-33-51](https://user-images.githubusercontent.com/79002614/182201996-beab4f34-6aa4-43d1-90ef-8dd98d758859.png)

![Screenshot from 2022-08-01 19-33-55](https://user-images.githubusercontent.com/79002614/182202016-5140acf4-fc21-4232-8b16-d5756d6bf2e8.png)

![Screenshot from 2022-08-01 19-36-26](https://user-images.githubusercontent.com/79002614/182202063-e72de761-173f-458c-a6f7-1a1d8ea6bf01.png)

4. Указываем фб в конфиге

![Screenshot from 2022-08-01 19-38-55](https://user-images.githubusercontent.com/79002614/182202140-991ada72-7e18-4597-a4d0-2bba64165bcb.png)

5. Добавляем маршруты

![Screenshot from 2022-08-01 19-41-46](https://user-images.githubusercontent.com/79002614/182202204-2b74a386-2443-451a-9d2f-4c760af6e3db.png)

6. Изменяем view (в процессе) 

![Screenshot from 2022-08-01 19-47-41](https://user-images.githubusercontent.com/79002614/182202228-d90e6ac6-6625-4ef9-8235-4a680c7b753c.png)

______________________

# Hawking School Homework #19

Задание:

1. При помощи консольных команд создайте символьную ссылку

2. Напишите методы, которые позволят, например, получить содержимое файла; определить
существование файла; скачать файл

3. Реализуйте сохранение файлов на разные диски. Например, новости сохраняются на диск news, а
посты на диск posts

4. Установите пакет Intervention Image и реализуйте обработку изображений, например, аватары,
загружаемые пользователем, должны сохраняться с разрешением не больше 100x100

5. Творческое задание. Используя возможности Intervention Image нарисуйте простое изображение

Ход работы:

1. Процесс создания символьной ссылки был подробнее рассмотрен в одном из предыдущих заданий. Он выполняется командой php artisan storage:link, которая создает ссылку на storage

![image](https://user-images.githubusercontent.com/79002614/182181168-786af7f1-fe89-4c0b-bcf5-e2ae114c5979.png)

2. Пример использования функций для работы с изображениями

![Screenshot from 2022-08-01 18-19-31](https://user-images.githubusercontent.com/79002614/182187462-22f2863a-e9e3-4bce-a5fd-62ac99684154.png)

3. Сохранение оружий и персонажей на разные диски

![Screenshot from 2022-08-01 18-22-12](https://user-images.githubusercontent.com/79002614/182187693-291ae87a-9d6d-43f3-850c-a27d50cbe6c4.png)

![Screenshot from 2022-08-01 18-22-49](https://user-images.githubusercontent.com/79002614/182187708-1e0cea5f-e514-4034-8245-bba78fcb52c4.png)

4. Установка пакета Intervention Image

![Screenshot from 2022-08-01 18-24-28](https://user-images.githubusercontent.com/79002614/182187812-b4ea3d46-5775-47e0-93df-38c9ce9da0ab.png)

![Screenshot from 2022-08-01 18-25-35](https://user-images.githubusercontent.com/79002614/182187831-872bcd89-3cb8-4c4f-a9f4-5ac1ab97012e.png)

![Screenshot from 2022-08-01 18-26-26](https://user-images.githubusercontent.com/79002614/182187847-a08e85f0-fd30-460c-a4ad-967e9ad82144.png)

![Screenshot from 2022-08-01 18-27-31](https://user-images.githubusercontent.com/79002614/182187887-4f414f47-1c28-4cbd-854c-3d26d8da2574.png)

5. Смена размера изображения загружаемого пользователем

![Screenshot from 2022-08-01 18-36-19](https://user-images.githubusercontent.com/79002614/182187943-6280fe07-b4d9-49ba-9683-51c02141f0a9.png)

6. Методы для создания собственного изображения (пока не выполнено на практике из-за некоторых технических проблем)

![Screenshot from 2022-08-01 18-39-35](https://user-images.githubusercontent.com/79002614/182188011-0c2ccce2-7c8c-475b-9370-cf266a3acf74.png)

______________________

# Hawking School Homework #18

Задание:

1. Настройте отправку email-письма пользователю при каком-либо событии (регистрация,
создание новости, оформление подписки на рассылку и т.д.).

2. Для этого создайте событие и слушателя или подписчика на события и зарегистрируйте их в
EventServiceProvider.

3. Создайте шаблон письма и укажите в нем имя пользователя.

4. Оберните блок кода отправки сообщения в конструкцию try-catch, в блоке catch пропишите
логирование, используйте заведомо некорректные данные при отправке сообщения для
тестирования логирования.

Ход работы:

1. Определяем слушателя и событие

![Screenshot from 2022-07-31 23-08-23](https://user-images.githubusercontent.com/79002614/182044651-42665075-7d26-4a0e-be15-443947448609.png)

2. Создаем их при помощи следующей команды 

![Screenshot from 2022-07-31 23-08-54](https://user-images.githubusercontent.com/79002614/182044661-835a4466-cc91-43e1-b950-410db374a22b.png)

![Screenshot from 2022-07-31 23-13-02](https://user-images.githubusercontent.com/79002614/182044705-3c9c85d4-dee1-4cb2-a7ed-ab4d52d5a9f4.png)

3. Создаем mail

![Screenshot from 2022-07-31 23-15-47](https://user-images.githubusercontent.com/79002614/182044728-e07fa2e4-0521-43fa-9bfd-358ff988a232.png)

![Screenshot from 2022-07-31 23-19-53](https://user-images.githubusercontent.com/79002614/182044753-25b65fb5-123e-436e-ae5b-ca90f22cba78.png)

![Screenshot from 2022-07-31 23-42-26](https://user-images.githubusercontent.com/79002614/182044763-ad474849-8f5f-4b56-a63f-957510c9321a.png)

______________________

# Hawking School Homework #17

Задание:

Скорректируйте реализованную фильтрацию и поиск данных в своем проекте на ElasticSearch.
Занесите в ElasticSearch минимум одну сущность проекта.

Ход работы:

1. Устанавливаем Elasticsearch с помощью следующих инструкций

![image](https://user-images.githubusercontent.com/79002614/182042731-0989e240-18e1-400e-b833-b41a399466e1.png)

2. Изменяем AppServiceProvider

![Screenshot from 2022-07-31 22-27-52](https://user-images.githubusercontent.com/79002614/182042751-13639630-9742-4297-be22-732fa215fd1a.png)

3. Создаем наблюдателя

![Screenshot from 2022-07-31 22-42-14](https://user-images.githubusercontent.com/79002614/182042768-3ebc3597-10ce-4b23-9f16-ece73651d81d.png)

4. Создаем трейт поиска

![image](https://user-images.githubusercontent.com/79002614/182042786-dbaf7b91-5b84-43f1-a209-df026cf638b6.png)

5. Добавляем трейт в модель

![Screenshot from 2022-07-31 22-43-52](https://user-images.githubusercontent.com/79002614/182042807-ba997512-40d9-4aad-bc5d-67e642dcdeee.png)

6. todo: закончить реализацию. К сожалению, возникли небольшие проблемы с Elasticsearch и не получилось разобраться, как его лучше использовать на данной модели. Возможно при реализации КП будет дополнено.

______________________

# Hawking School Homework #16

Задание:

1. Обернуть запросы в базу данных в кэш, используя обычный и тегированный кэши.

2. Написать Artisan-команду, которая периодически очищает кэш.

Ход работы:

1. Подготовка для работы с кэшом

![Screenshot from 2022-07-31 15-59-49](https://user-images.githubusercontent.com/79002614/182028523-aa0350ca-f5c9-4d09-9f8b-5fb0658f3711.png)

2. Используем команды кэша для хранения данных из БД

![Screenshot from 2022-07-31 16-02-35](https://user-images.githubusercontent.com/79002614/182028571-d3cd3e93-08fa-4e68-b859-b1717418b639.png)

![Screenshot from 2022-07-31 16-03-56](https://user-images.githubusercontent.com/79002614/182028578-ba02c05a-dfec-43ae-a91c-3bd8d9b5745a.png)

![Screenshot from 2022-07-31 16-04-58](https://user-images.githubusercontent.com/79002614/182028592-632eabf2-c475-4076-9223-56b96840112d.png)

![Screenshot from 2022-07-31 16-05-29](https://user-images.githubusercontent.com/79002614/182028601-b10c22a7-fe88-40d1-896d-8b028192df21.png)

3. Тэгированный кэш

![Screenshot from 2022-07-31 16-07-24](https://user-images.githubusercontent.com/79002614/182028609-ada1c97e-ef4d-4dfd-8587-5c7de0508f6f.png)

4. Создаем свою артизан-команду

![Screenshot from 2022-07-31 16-09-54](https://user-images.githubusercontent.com/79002614/182028620-b9a557d8-361d-41c9-bf51-e9a576f59573.png)

5. Прописываем правила вызова и работы команды

![Screenshot from 2022-07-31 16-23-41](https://user-images.githubusercontent.com/79002614/182028634-0f1408a2-61b7-40a8-8fd8-fbcef80e6667.png)

______________________

# Hawking School Homework #15

Задание:

1. Выбрать всех сотрудников с серией паспорта 1015 и номером 422269

2. Найти всех сотрудников с именем Алексей c датой рождения после 1 июля 1999
года

3. Подсчитать какое количество сотрудников работает в компании 'Cеверсталь'

4. Выбрать всех инженеров с датой рождения между 1 декабря 1979 и 1 февраля
1980, отсортированных по имени и фамилии

5. Выбрать всех сотрудников с должностями Химик-технолог, Химик и Биохимик,
которые работают в X5 Retail Group отсортированных по дате рождения - от
молодых к старым

Ход работы: 

1. Устанавливаем phpmyadmin и импортируем таблицу для дз с помощью следующей команды:

![image](https://user-images.githubusercontent.com/79002614/182026274-134f575d-ab8d-4bf1-b9f6-5a55254da98a.png)

![Screenshot from 2022-07-31 14-54-22](https://user-images.githubusercontent.com/79002614/182026286-21fd06bc-43ec-4196-b6f3-9fe583c3d862.png)

2. 

![Screenshot from 2022-07-31 14-58-36](https://user-images.githubusercontent.com/79002614/182026297-3abd45ee-6180-4d52-98f9-0fbb364f97e0.png)

3.

![Screenshot from 2022-07-31 15-05-29](https://user-images.githubusercontent.com/79002614/182026309-a27ead27-8272-4584-a426-c54d025e58cc.png)

4. 

![Screenshot from 2022-07-31 15-07-12](https://user-images.githubusercontent.com/79002614/182026320-e2aa987c-e9f8-4577-85dc-20dedab44d99.png)

5. Не уверена, правильно ли поняла правило сортировки, так что два варианта:

![Screenshot from 2022-07-31 15-21-57](https://user-images.githubusercontent.com/79002614/182026345-c425223d-cbd3-490d-a9e4-af53a6fba694.png)

![Screenshot from 2022-07-31 15-10-33](https://user-images.githubusercontent.com/79002614/182026351-488f6f0c-58da-44a4-83f6-2a64a1ead373.png)

6. 

![Screenshot from 2022-07-31 15-19-15](https://user-images.githubusercontent.com/79002614/182026354-66b70b07-b093-461a-af3b-85b66d92dd58.png)

______________________

# Hawking School Homework #14

Задание:

1. Приведите примеры использования Join в вашем проекте.

2. Свяжите ранее созданные на проекте модели.

3. Для получения связанных записей не забывайте использовать жадную загрузку.

4. Вынесите в трейты методы, которые могут быть использованы не только конкретной моделью, в которую они добавлены.

5. *Познакомьтесь с полиморфными отношениями и реализуйте их в вашем приложении.
Например, если бы у вас была сущность comments, то её можно было бы связать с сущностями:
posts, articles, news.

Ход работы:

1. Использование join-a для вывода информации о персонаже

![Screenshot from 2022-07-31 01-36-42](https://user-images.githubusercontent.com/79002614/182002936-00101bd0-d023-4d0f-bfd7-37a77caa1151.png)

2. Связывание моделей было выполнено в прошлом задании (см. ниже)

3. 

![Screenshot from 2022-07-31 01-47-11](https://user-images.githubusercontent.com/79002614/182002960-6c4b1886-5b2b-47dd-b5e8-60367a157570.png)

4. Создаем трейт редкости, т.к. он может принадлежать любым игровым предметам

![Screenshot from 2022-07-31 01-43-52](https://user-images.githubusercontent.com/79002614/182002977-a43408ae-8f28-467c-bc94-7d7d4e78e502.png)

![Screenshot from 2022-07-31 01-29-24](https://user-images.githubusercontent.com/79002614/182002980-66641dce-6499-4a28-8e5f-0d5275e343b3.png)

![Screenshot from 2022-07-31 01-28-48](https://user-images.githubusercontent.com/79002614/182002983-20fb6df7-7685-4e7b-a2dc-bd30c15430d3.png)

______________________

# Hawking School Homework #13

Задание:

1. Создайте при помощи консольных команд модели для необходимых на своем
проекте таблиц.

2. В моделях напишите методы, которые продемонстрируют работу с Eloquent или
построителем запросов (используйте то, что вам больше нравится), например,
получить записи, дата создания которых не больше 2 часов от текущего момента
времени; найти запись таблицы по одному из параметров (name, title) кроме id.

3. Реализуйте часть методов получения данных из БД с использованием коллекций.

4. *Напишите валидацию для созданных моделей (не реализовано на данный момент). 

Ход работы:

1. Создаем модели для таблиц, содержащих информацию о редкости персонажа, его/её элементе и оружии (*персонаж может владеть только одним оружием, но по умолчанию у него должен быть определен тип оружия с помощью оружия самой минимальной редкости (1 из 5)).

![Screenshot from 2022-07-30 23-12-48](https://user-images.githubusercontent.com/79002614/181999216-c886718c-034b-4723-a358-251d387c8430.png)

2. Выполняем миграции. Так как изменяется структура таблиц (внешние ключи), легче создать таблицы заново

![Screenshot from 2022-07-30 23-52-03](https://user-images.githubusercontent.com/79002614/181999797-1d04647e-fc64-48f7-abe7-6e2edc7f73bf.png)

3. Добавляем аксессоры и мутаторы 

![Screenshot from 2022-07-31 00-17-31](https://user-images.githubusercontent.com/79002614/182000067-0b1cb66b-36d2-45f4-9e9f-616f23076bf2.png)

4. Выбираем всех персонажей с определенным элементом (тестовый запрос - предопределенный элемент, в идеале реализация выбора элемента пользователем)

![image](https://user-images.githubusercontent.com/79002614/182000438-2465b07f-ac8f-4bb0-b507-7d63d53ef59d.png)

![image](https://user-images.githubusercontent.com/79002614/182000659-94e76e43-64f6-46a3-aee6-9236a33fb2cf.png)

![image](https://user-images.githubusercontent.com/79002614/182000876-6bd654f0-6379-4b65-9f94-8eec119e53c2.png)

______________________

# Hawking School Homework #12

Задание:

1. Добавьте класс StorePostRequest и опишите в нем правила валидации, в том числе проверку
на уникальность title.

2. С помощью миграции добавьте в таблицу posts поле image. В форму создания поста добавьте поле с
изображением. Реализуйте логику сохранения изображения в методе store контроллера.

3. Дополните логику сохранения изображений и реализуйте подобие галереи загруженных изображений 

Ход работы: 

1. Создаем класс StorePostRequest (забыла изменить название под свою тему) с помощью команды artisan:

![Screenshot from 2022-07-30 15-08-52](https://user-images.githubusercontent.com/79002614/181919884-ed3e34d8-4f57-45eb-b25d-66e2007bcbd8.png)

2. В контроллере заменяем класс Request на только что созданный

![Screenshot from 2022-07-30 15-30-24](https://user-images.githubusercontent.com/79002614/181919904-fe48a4ff-c2b0-432f-84ce-85e4601679ab.png)

3. Ставим условия валидации

![Screenshot from 2022-07-30 17-55-29](https://user-images.githubusercontent.com/79002614/181919950-0a535c16-dec8-44f1-a149-bd4f0952d257.png)

4. Теперь при внесении уже существующего имени нас будет переотправлять обратно на страницу ввода. В идеале можно добавить отдельную страницу сообщения с ошибкой.

5. Поле image_link было создано в предыдущем домашнем задании

![Screenshot from 2022-07-30 15-54-02](https://user-images.githubusercontent.com/79002614/181920016-db7ba829-1f2c-4469-95a8-78a94e305d13.png)

6. Необходимо добавить следующее свойство форме - без него изображения не будут приходить (ошибка с empty)

![Screenshot from 2022-07-30 16-32-58](https://user-images.githubusercontent.com/79002614/181920048-078b0753-a3da-497d-90fb-48f6f3228d03.png)

7. Создаем ссылку на хранилище

![Screenshot from 2022-07-30 16-37-51](https://user-images.githubusercontent.com/79002614/181920076-75e6379f-15dc-43b2-9f3a-51437043dbb1.png)

8. Пробуем добавить персонажа, смотрим, как теперь будет выводиться информация о них (первые два персонажа на скриншоте были добавлены ранее, так что не имеют изображений)

![Screenshot from 2022-07-30 17-23-02](https://user-images.githubusercontent.com/79002614/181920116-2728a387-fe1b-4dc9-9b32-15f0e5d9d8f0.png)

9. Галерея реализована в виде таблички изображений всех персонажей перед общим списком

![Screenshot from 2022-07-30 17-46-31](https://user-images.githubusercontent.com/79002614/181920146-ca2e38fd-6532-4461-9359-73f999ba6392.png)

10. Код галереи

![image](https://user-images.githubusercontent.com/79002614/181920166-73b994d0-974f-41f7-9487-1a06fb9b3444.png)

______________________

# Hawking School Homework #11

1. Добавляем unique на одно из полей, в данном случае - поле с именем персонажа

![Screenshot from 2022-06-30 17-15-22](https://user-images.githubusercontent.com/79002614/176712594-10dc1a55-505c-4f31-8e99-fb69dc5b812f.png)

2. Устанавливаем Laravel Debugbar

![image](https://user-images.githubusercontent.com/79002614/176713134-8c95d559-7728-460e-9d28-e7e90a8f3e12.png)

![Screenshot from 2022-06-30 17-26-04](https://user-images.githubusercontent.com/79002614/176713179-890c6b81-1f0a-4828-bc61-f9f8bac16dfd.png)

2.1. Создание моделей, контроллеров и представлений было подробнее рассмотрено в ДЗ №10 - См. ниже.

3. Выполняем какие-либо действия, смотрим, что покажет Debugbar

![Screenshot from 2022-06-30 17-26-50](https://user-images.githubusercontent.com/79002614/176713312-3e5e1e67-d10b-4485-b2e1-b21fa8bcc269.png)

4. Вставляем данные через форму, смотрим sql-запрос

![Screenshot from 2022-06-30 17-27-36](https://user-images.githubusercontent.com/79002614/176713599-c9a44583-f89a-4d36-95b1-99668c05dbc8.png)

5. Пробуем вставить персонажа с таким же именем

![Screenshot from 2022-06-30 17-28-33](https://user-images.githubusercontent.com/79002614/176713771-fefb8174-f05d-4d7b-bd16-80e136eb6936.png)

6. С помощью посредника предотвращаем вставку в таблицу записи с существующим именем (мной был использован уже существующий посредник как тест, целесообразнее, разумеется, создать отдельный посредник, просто немного не хватило времени переделать).

![image](https://user-images.githubusercontent.com/79002614/176714371-a8651169-ecf0-4dd6-b73c-7d8988426632.png)

7. Снова пробуем вставить данные с уже существующим именем - нам выводится сообщение, что такой персонаж уже существует

![Screenshot from 2022-06-30 18-00-38](https://user-images.githubusercontent.com/79002614/176714616-62ddda37-68da-4c08-af4e-dbc19cea73bb.png)


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
