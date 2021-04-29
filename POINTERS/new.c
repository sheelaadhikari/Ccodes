#include<stdio.h>
void accept(int x);
    void main(){
        int a;
        printf("enter the number: ");
        scanf("%d", &a);
        accept(a);

    }
    void accept(int x){
        if(x>9&&x<100)
        printf("accepted");
        else
        printf("error");
    }

