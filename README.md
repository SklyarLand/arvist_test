<h1>Проект тестового задания</h1>

В файле App/Config/Database.php расположены параметры конфигурации БД


<h2>Текст задания</h2>

Есть главное предприятие, у него три (и больше) филиала, в каждом филиале некоторое количество работников, работники делятся на ИТР и рядовых сотрудников.

Нужно сделать программу, которая:

1. Выдает список всех филиалов, у каждого кнопка подробнее

2. При нажатии на Подробнее открывается список сотрудников филиала и информация о филиале, список отсортирован алфавитно, с указанием должности.

<h2>База данных:</h2>

Состоит из 3 таблиц:

branches:

          id - int
    
        name - varchar(100)
        
      info - text(5000)

workers:

             id - int

           name - varchar(100)

    position_id - int
    
      branch_id - int
    
positions:

      id - int
    
    name - varchar(100)
        
arvis.sql - дамп базы данных