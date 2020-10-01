// program to find products of digits of given number
#include <stdio.h>
void main()
{
    int n, r, p = 1;
    printf("enter a number for n:");
    scanf("%d", &n);
    while (n > 0)
    {
        p = n % 10 * p;
        n = n / 10;

    }
    printf("the product of digits is %d",p);
}
