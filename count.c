// program to find greatest and smallest number of five students
#include <stdio.h>
void main()
{
    int marks, i, g = 0, s = 500;
    for (i = 1; i <= 5; i++)
    {
        printf("enter the %d marks ", i);
        scanf("%d", &marks);
        g = g > marks ? g : marks;
        s = marks < s ? marks : s;
    }
    printf("greater marks is %d\n",g);
    printf("smaller marks is %d",s);
}