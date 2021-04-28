#include <stdio.h>
int display(int n);
void main()
{
    int n;
    printf("enter the value: ");
    scanf("%d", &n);
    display(n);
}

int display(int n){
    if(n>0){
        printf("all done");
        return 0;
    }

printf("%5d", n);
n--;
display(n);
    
} 