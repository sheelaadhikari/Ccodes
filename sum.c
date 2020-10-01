//  program to find the sum of digits of any number
#include <stdio.h>S
void main(){
    int num,rem,sum=0;
    printf("enter number for num:\n");
    scanf("%d",&num);
    while (num>0)
    {
        rem= num%10;
        sum= sum+rem;
        num= num/10;

    }
    printf("sum of the digits= %d\n",sum);

}