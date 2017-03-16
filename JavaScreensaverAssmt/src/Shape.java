import java.awt.Graphics2D;

public abstract class Shape {

	private int zr;
	private int zg;
	private int zb;
	private int x;
	private int y;
	private int velocityX;
	private int velocityY;
	private int xy;
	
	



	public int getZr() {
		return zr;
	}

	public void setZr(int zr) {
		this.zr = zr;
	}

	public int getZg() {
		return zg;
	}

	public void setZg(int zg) {
		this.zg = zg;
	}

	public int getZb() {
		return zb;
	}

	public void setZb(int zb) {
		this.zb = zb;
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

	public int getXy() {
		return xy;
	}

	public void setXy(int xy) {
		this.xy = xy;
	}

	public abstract void draw(Graphics2D g2d);
	
	public abstract void move();
	

}
