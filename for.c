// program to find greatest and lowest marks of five students
#include <stdio.h>
void main()
{
    int i, greatest=0, lowest=100, marks;
    for (i = 1; i <= 5; i++)
    {
        printf("enter the marks of student %d ", i);
        scanf("%d", &marks);
        if (marks > greatest)
        {
            greatest = marks;
        }
        if (marks < lowest)
        {
            lowest = marks;
        }
    }
    printf("the greatest marks is %d and lowest mark is %d", greatest, lowest);
}
