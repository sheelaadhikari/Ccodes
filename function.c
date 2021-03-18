//write a program to find square root of any number using function
#include<stdio.h>
#include<math.h>
main(){
    double n,s;
    printf("enter a number: ");
    scanf("%lf", &n);
    s=sqrt(n);
    printf("the square root of %.2lf is %.2lf\n", n, s);

}