import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class dipirona here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class dipirona extends Actor
{
    /**
     * Act - do whatever the dipirona wants to do. This method is called whenever
     * the 'Act' or 'Run' button gets pressed in the environment.
     */
    public void act() 
     {
        cair();
    } 
    
    public void cair(){
    if(getY()!=305){
    setLocation(getX(),getY()+60);
    }
}  
}
