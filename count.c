#include <stdio.h>
void main(){
  int i, num, rem, count;
  printf("enter any digit number: ");
  scanf("%d",&num);
  for(i=0;num>0;i++){
      rem=num%10;
      if(num>0){
          count++;

      }
  }
  printf("\n you have entered %d digit number: ",count);
    
}