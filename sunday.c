#include <stdio.h>
void main()
{
    int i = 1;
    do

    {

        if (i % 2 == 0)

            printf("%d\t", i);
        i = i + 1;

    } while (i <= 10);
    printf("\n");
}
