package com.example.sean_ryall.calcassignment;

/**
 * Created by sean_ryall on 16-09-25.
 */
public class Math {

    public double leftNum;
    public double rightNum;
    public double result;
    public String operator;
    public boolean canDel;


    public void setLeftNum(double leftNum) {
        this.leftNum = leftNum;
    }

    public void setRightNum(double rightNum) {
        this.rightNum = rightNum;
    }

    public void setResult(double result) {
        this.result = result;
    }

    public void setOperator(String operator) {
        this.operator = operator;
    }

    public double getLeftNum() {
        return leftNum;
    }

    public double getRightNum() {
        return rightNum;
    }

    public String getOperator() {
        return operator;
    }

    public double getResult() {
        return result;
    }


    public void work() {
        double ans = 0;
        switch (getOperator()) {
            case "+":
                ans = getLeftNum() + getRightNum();
                setResult(ans);
                break;
            case "-":
                ans = getLeftNum() - getRightNum();
                setResult(ans);
                break;
            case "÷":
                ans = getLeftNum() / getRightNum();
                setResult(ans);
                break;
            case "×":
                ans = getLeftNum() * getRightNum();
                setResult(ans);
                break;
        }

    }

    public void opWork(String oper){
        canDel=false;
        String nums = MainActivity.tvNumbers.getText().toString();
        if(!MainActivity.lnum){
            setOperator(oper);
            setLeftNum(Double.parseDouble(nums));
            //operator = oper;
            MainActivity.op=true;
            MainActivity.lnum=true;
        }
        else{
            setOperator(oper);
            setRightNum(Double.parseDouble(nums));
            work();
            setLeftNum(getResult());
            // math.leftNum = math.result;
            MainActivity.tvNumbers.setText(String.valueOf(MainActivity.df.format(result)));
            MainActivity.op=true;
            if((getOperator().equals("÷"))&&getRightNum()==0){
                MainActivity.tvNumbers.setText("NaN");
            }
        }
    }

    public void equals(){
        canDel=false;
        String nums = MainActivity.tvNumbers.getText().toString();
        setRightNum(Double.parseDouble(nums));
        work();
        MainActivity.tvNumbers.setText(String.valueOf(MainActivity.df.format(result)));
        MainActivity.lnum = false;
        MainActivity.op=true;
        if((getOperator().equals("÷"))&&getRightNum()==0){
            MainActivity.tvNumbers.setText("NaN");
        }
    }

}