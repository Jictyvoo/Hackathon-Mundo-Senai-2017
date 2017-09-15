import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class bg2 here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class bg2 extends fase1
{

    /**
     * Constructor for objects of class bg2.
     * 
     */
    public bg2()
    {
        super();
        prepare();
    }

    /**
     * Prepare the world for the start of the program.
     * That is: create the initial objects and add them to the world.
     */
    private void prepare()
    {
        bau bau = new bau();
        addObject(bau,481,276);
        bau.setLocation(378,311);
        bau.setLocation(341,321);
    }
}
