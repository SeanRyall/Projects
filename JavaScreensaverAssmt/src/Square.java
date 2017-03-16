import java.awt.Color;
import java.awt.GradientPaint;
import java.awt.Graphics2D;
import java.awt.RenderingHints;
import java.awt.geom.Rectangle2D;
import java.util.Random;

public class Square extends Shape {
	
	private Random randomNum = new Random(); 
	private Random randomNum2 = new Random();
	
	private int zr = randomNum.nextInt((255 + 1) - 20) + 20;
	private int zg = randomNum.nextInt((255 + 1) - 20) + 20;
	private int zb = randomNum.nextInt((255 + 1) - 20) + 20;
	private int x = randomNum.nextInt((600 + 1) - 40) + 40;
	private int y = randomNum.nextInt((380 + 1) - 40) + 40;
	private int velocityX = randomNum.nextInt((10 + 1) - (5)) + (5);
	private int velocityY = randomNum.nextInt((10 + 1) - (5)) + (5);
	private int xy = randomNum.nextInt((100 + 1) - 50) + 50;
	
	

	public Random getRandomNum() {
		return randomNum;
	}




	public void setRandomNum(Random randomNum) {
		this.randomNum = randomNum;
	}




	public Random getRandomNum2() {
		return randomNum2;
	}




	public void setRandomNum2(Random randomNum2) {
		this.randomNum2 = randomNum2;
	}




	public int getX() {
		return x;
	}




	public void setX(int x) {
		this.x = x;
	}




	public int getY() {
		return y;
	}




	public void setY(int y) {
		this.y = y;
	}




	public int getVelocityX() {
		return velocityX;
	}




	public void setVelocityX(int velocityX) {
		this.velocityX = velocityX;
	}




	public int getVelocityY() {
		return velocityY;
	}




	public void setVelocityY(int velocityY) {
		this.velocityY = velocityY;
	}




	@Override
	public void draw(Graphics2D g2d) {
		
		g2d.setRenderingHint(RenderingHints.KEY_ANTIALIASING,RenderingHints.VALUE_ANTIALIAS_ON);
		g2d.setColor(new Color(zr,zg,zb));
		Rectangle2D rectangle = new Rectangle2D.Double(x, y, xy, xy);
		g2d.fill(rectangle);
		GradientPaint g1 = new GradientPaint(x, x,  Color.WHITE, y, y,  Color.DARK_GRAY, true);
		g2d.setPaint(g1);
		g2d.fill(rectangle);
	    g2d.setPaint(Color.BLACK); 
	    g2d.draw(rectangle);
	  
	}
	
//	@Override
	public void move()
	{
		if (x < 0 || x > (700 - xy))
			velocityX = - velocityX;
		if (y < 0 || y > (480 - xy))
			velocityY = - velocityY;
		
		x += velocityX;
		y += velocityY;
		
//		if (getX() < oval.getX() ||)
	}

}
