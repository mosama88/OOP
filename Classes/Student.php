<?php

// Public -> Global Access (الوصول العام)

// شرح مستويات الوصول في البرمجة الكائنية (OOP) في PHP:
// private (التغليف - Encapsulation)

// لا يمكن الوصول إلى الخاصية أو الدالة إلا داخل نفس الكلاس.
// لا يمكن الوصول إليها من الكلاسات الموروثة أو خارج الكلاس.
// protected (الوراثة - Inheritance)

// يمكن الوصول إليها داخل نفس الكلاس والكلاسات الموروثة (extends).
// لا يمكن الوصول إليها من خارج الكلاس مباشرةً.
// public (الوصول العام - Global Access)

// يمكن الوصول إلى الخاصية أو الدالة من أي مكان، سواء داخل الكلاس، من كلاس آخر، أو حتى من خارج الكلاس.


class Student
{
    public string $name;
    public int $age;
    public string $grade;

    const School = 'TABA';


    public function checkData(string $name, int $age, string $grade)
    {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;



        // constant الثوابت


        return !empty($result) ? $result : "No conditions met"; // إرجاع النتائج أو رسالة افتراضية
    }
}