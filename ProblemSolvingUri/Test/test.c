#include <stdio.h>
int main() {
    int T,num;
    scanf("%d",&T);
    while(T--)
    {
        scanf("%d",&num);
        if(num<0)
        {
            if(num%2 == 0)
                printf("EVEN NEGATIVE\n");
            else
                printf("ODD NEGATIVE\n");
        }
        else if(num>0)
        {
            if(num%2 == 0)
                printf("EVEN POSITIVE\n");
            else
                printf("ODD POSITIVE\n");
        }
        else
            printf("NULL\n");
    }
    return 0;
}