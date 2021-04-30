#include<stdio.h>
#include<sys/unistd.h>
#include<fcntl.h>
#include<termios.h>
#include<string.h>
struct termios setting_old,setting_new;
int main(void){
    char a='a';
    char b[4];
    int fd,i=0,fin=0;
    printf("open:%d\n",fd=open("/dev/ttyACM0",O_RDWR));
    tcgetattr(fd,&setting_new);
    setting_old =setting_old;
    cfsetispeed(&setting_new,B9600);
    cfsetospeed(&setting_new,B9600);
    tcsetattr(fd,TCSANOW,&setting_new);
    printf("\ninput_speed=%d",cfgetospeed(&setting_new));
    printf("\nwrite:%ld\n",write(fd,&a,1));
    while(read(fd,b,4)==0){
        sleep(1);
        write(fd,&a,1);
    }   
    //printf("returned:%s\n",b);
    tcflush(fd, TCIOFLUSH);
    close(fd);
    while(i<=1){
        fin=fin*10+(b[i]-'0');
        i++;
    }
    //printf("\n%d",fin*4/20);
    //distance =20 ,,adjust=4
    //4/20*x
    return (fin*4/20);
}