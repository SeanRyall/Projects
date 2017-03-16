import java.awt.Color;
import java.awt.Graphics2D;
import java.awt.RenderingHints;
import java.awt.geom.GeneralPath;
import java.util.Random;

public class Heart extends Shape {
	
	private Random randomNum = new Random(); 
	private Random randomNum2 = new Random();
	
	private int zr = randomNum.nextInt((255 + 1) - 20) + 20;
	private int zg = randomNum.nextInt((255 + 1) - 20) + 20;
	private int zb = randomNum.nextInt((255 + 1) - 20) + 20;
	private int x = randomNum.nextInt((600 + 1) - 40) + 40;
	private int y = randomNum.nextInt((380 + 1) - 40) + 40;
	private int velocityX = randomNum.nextInt((10 + 1) - (5)) + (5);
	private int velocityY = randomNum.nextInt((10 + 1) - (5)) + (5);
//	private int xy = randomNum.nextInt((120 + 1) - 50) + 50;

	

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
//		g2d.fillOval(40, 10, 150, 150);
		
		GeneralPath pen = new GeneralPath();
		
		pen.moveTo(x,y);
		pen.curveTo(x-40, y-50, x-120, y, x, y+80);
		pen.curveTo(x+120, y, x+40, y-50, x, y);
		pen.closePath();
		

		g2d.fill(pen);
	}
	
//	@Override
	public void move()
	{
		if (x < 60 || x > (700 - 60))
			velocityX = - velocityX;
		if (y < 20 || y > (480 - 80))
			velocityY = - velocityY;
		
		x += velocityX;
		y += velocityY;
		
	}

}
