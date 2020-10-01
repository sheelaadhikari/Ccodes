#include <stdio.h>
void main()
{
    int a, b, c, large;
    printf("enter three numbers: ");
    scanf(" %d%d%d", &a, &b, &c);
    if (a > b)
    {
        large = a;
        

         large = c;
    }

    else
    {
        if (b > c)
            large = b;
        else

            large = c;
    }

    printf("largest number is %d\n", large);
}
