#include <stdio.h>
void main()
{
    float m1, m2, m3, m4, total, per;
    char grade;
    printf("enter marks for four subjects: ");
    scanf("%f%f%f%f", &m1, &m2, &m3, &m4);
    total = m1 + m2 + m3 + m4;
    per = total / 4;

    if (per >= 85)
        grade = 'A';
    else if(per >= 70)
        grade = 'B';
    else if(per >= 55)
        grade = 'C';
    else if(per >= 40)
        grade = 'D';
    
    else 
        grade = 'E';

        printf("grade of the student is %c", grade);
        
    }


