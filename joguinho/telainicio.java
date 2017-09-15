import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class telainicio here.
 * 
 * @author (your name) 
 * @version (a version number or a date)
 */
public class telainicio extends World
{

    /**
     * Constructor for objects of class telainicio.
     * 
     */
    public telainicio()
    {    
        // Create a new world with 600x400 cells with a cell size of 1x1 pixels.
        super(600, 400, 1); 

        prepare();
    }

    /**
     * Prepare the world for the start of the program.
     * That is: create the initial objects and add them to the world.
     */
    private void prepare()
    {
        botao botao = new botao();
        addObject(botao,304,215);
        botao.setLocation(298,218);
        botao.act();
        botao.setLocation(290,195);
        botao.act();
        botao.setLocation(292,309);
        botao.setLocation(289,225);
        botao.setLocation(297,227);
    }
}
