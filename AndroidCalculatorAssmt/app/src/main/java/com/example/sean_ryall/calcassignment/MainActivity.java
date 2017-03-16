package com.example.sean_ryall.calcassignment;

import android.net.Uri;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.graphics.Typeface;
import java.text.DecimalFormat;

import com.google.android.gms.appindexing.Action;
import com.google.android.gms.appindexing.AppIndex;
import com.google.android.gms.common.api.GoogleApiClient;


public class MainActivity extends AppCompatActivity {
    /**
     * ATTENTION: This was auto-generated to implement the App Indexing API.
     * See https://g.co/AppIndexing/AndroidStudio for more information.
     */

    Math math = new Math();
    String operator;
    static boolean op=true;
    static boolean lnum=false;
    private GoogleApiClient client;
    static DecimalFormat df = new DecimalFormat("###.###########");



    //method for when number is clicked:
    public void numClick(String num){
        math.canDel=true;
        if (op) {
            tvNumbers.setText("");
            tvNumbers.append(num);
            op = false;}
        else {
            tvNumbers.append(num);
        }
    }

    // method to delete last number:
    public String Delete(String str) {
        return str.substring(0, str.length() - 1);
    }

            //step #1 - declare prop to hold control vars
    static TextView tvNumbers;
    Button btn0, btn1, btn2, btn3, btn4, btn5, btn6, btn7, btn8, btn9, btnClear, btnPlusMinus,
            btnBackspace, btnDec, btnEqual, btnPlus, btnMinus, btnDiv, btnMult;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


        //step #2 - connect control obj to xml vesion of control
        tvNumbers = (TextView) findViewById(R.id.tvNum);
        btn0 = (Button) findViewById(R.id.btn0);
        btn1 = (Button) findViewById(R.id.btn1);
        btn2 = (Button) findViewById(R.id.btn2);
        btn4 = (Button) findViewById(R.id.btn4);
        btn3 = (Button) findViewById(R.id.btn3);
        btn5 = (Button) findViewById(R.id.btn5);
        btn6 = (Button) findViewById(R.id.btn6);
        btn7 = (Button) findViewById(R.id.btn7);
        btn8 = (Button) findViewById(R.id.btn8);
        btn9 = (Button) findViewById(R.id.btn9);
        btnClear = (Button) findViewById(R.id.btnClr);
        btnPlusMinus = (Button) findViewById(R.id.btnPM);
        btnBackspace = (Button) findViewById(R.id.btnDel);
        btnDec = (Button) findViewById(R.id.btnDec);
        btnEqual = (Button) findViewById(R.id.btnEqual);
        btnPlus = (Button) findViewById(R.id.btnPlus);
        btnMinus = (Button) findViewById(R.id.btnMinus);
        btnDiv = (Button) findViewById(R.id.btnDiv);
        btnMult = (Button) findViewById(R.id.btnMult);



        //new typeface font for display:
        //font retrieved free from: http://m.font.downloadatoz.com/font,89883,opti-calculator/
        Typeface type = Typeface.createFromAsset(getAssets(), "fonts/opti-calculator-1361511632.ttf");
        tvNumbers.setTypeface(type);


        //step#3 - create listeners for controls (inner classes)
        View.OnClickListener oclClear = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                tvNumbers.setText("0");
                op=true;
                lnum=false;
                math.setLeftNum(0);
                math.setRightNum(0);
                math.setResult(0);
            }
        };
        View.OnClickListener ocl0 = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                numClick("0");
            }
        };
        View.OnClickListener ocl1 = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                numClick("1");
            }
        };
        View.OnClickListener ocl2 = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                numClick("2");
            }
        };
        View.OnClickListener ocl3 = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                numClick("3");
            }
        };
        View.OnClickListener ocl4 = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                numClick("4");
            }
        };
        View.OnClickListener ocl5 = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                numClick("5");
            }
        };
        View.OnClickListener ocl6 = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                numClick("6");
            }
        };
        View.OnClickListener ocl7 = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                numClick("7");
            }
        };
        View.OnClickListener ocl8 = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                numClick("8");
            }
        };
        View.OnClickListener ocl9 = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                numClick("9");
            }
        };

        View.OnClickListener oclDec = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                tvNumbers.append(".");
            }
        };
        View.OnClickListener oclDel = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(math.canDel) {
                    if ((tvNumbers.getText().length() == 1)) {
                        tvNumbers.setText("0");
                        op = true;
                    } else {
                        tvNumbers.setText(Delete(tvNumbers.getText().toString()));
                    }
                }
            }
        };//end oclDel.

        View.OnClickListener oclPM = new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                String nums = tvNumbers.getText().toString();
                CharSequence newStr = "-" + tvNumbers.getText();
                String s = (tvNumbers.getText().toString()).charAt(0) + "";
                CharSequence empty = "";

                if (nums.isEmpty()) {
                    tvNumbers.setText("");}
                else if (nums.equals("0")) {
                        tvNumbers.setText("0");
                } else if (s.equals("-")) {
                    tvNumbers.setText(nums.substring(0, 0) + nums.substring(0 + 1));
                } else if (!s.equals("-")) {
                    tvNumbers.setText(newStr);
                }

            }

        };//end oclPM

        View.OnClickListener oclPlus = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                math.opWork("+");
            }
        };//end oclPlus.

        View.OnClickListener oclMinus = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                math.opWork("-");
            }
        };//end oclMinus.

        View.OnClickListener oclMult = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                math.opWork("×");
            }
        };//end oclMult.

        View.OnClickListener oclDiv = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                math.opWork("÷");
            }
        };//end oclMult.

        View.OnClickListener oclEqual = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(!math.operator.equals("")) {

                    math.equals();
                }
            }
        };



        //step#4 - connect listeners to control objects

        btnClear.setOnClickListener(oclClear);
        btn0.setOnClickListener(ocl0);
        btn1.setOnClickListener(ocl1);
        btn2.setOnClickListener(ocl2);
        btn3.setOnClickListener(ocl3);
        btn4.setOnClickListener(ocl4);
        btn5.setOnClickListener(ocl5);
        btn6.setOnClickListener(ocl6);
        btn7.setOnClickListener(ocl7);
        btn8.setOnClickListener(ocl8);
        btn9.setOnClickListener(ocl9);
        btnDec.setOnClickListener(oclDec);
        btnBackspace.setOnClickListener(oclDel);
        btnPlusMinus.setOnClickListener(oclPM);
        btnPlus.setOnClickListener(oclPlus);
        btnEqual.setOnClickListener(oclEqual);
        btnMinus.setOnClickListener(oclMinus);
        btnMult.setOnClickListener(oclMult);
        btnDiv.setOnClickListener(oclDiv);


        // ATTENTION: This was auto-generated to implement the App Indexing API.
        // See https://g.co/AppIndexing/AndroidStudio for more information.
        client = new GoogleApiClient.Builder(this).addApi(AppIndex.API).build();
    }//end onCreate.

    @Override
    public void onStart() {
        super.onStart();

        // ATTENTION: This was auto-generated to implement the App Indexing API.
        // See https://g.co/AppIndexing/AndroidStudio for more information.
        client.connect();
        Action viewAction = Action.newAction(
                Action.TYPE_VIEW, // TODO: choose an action type.
                "Main Page", // TODO: Define a title for the content shown.
                // TODO: If you have web page content that matches this app activity's content,
                // make sure this auto-generated web page URL is correct.
                // Otherwise, set the URL to null.
                Uri.parse("http://host/path"),
                // TODO: Make sure this auto-generated app URL is correct.
                Uri.parse("android-app://com.example.sean_ryall.calcassignment/http/host/path")
        );
        AppIndex.AppIndexApi.start(client, viewAction);
    }//end onStart.

    @Override
    public void onStop() {
        super.onStop();

        // ATTENTION: This was auto-generated to implement the App Indexing API.
        // See https://g.co/AppIndexing/AndroidStudio for more information.
        Action viewAction = Action.newAction(
                Action.TYPE_VIEW, // TODO: choose an action type.
                "Main Page", // TODO: Define a title for the content shown.
                // TODO: If you have web page content that matches this app activity's content,
                // make sure this auto-generated web page URL is correct.
                // Otherwise, set the URL to null.
                Uri.parse("http://host/path"),
                // TODO: Make sure this auto-generated app URL is correct.
                Uri.parse("android-app://com.example.sean_ryall.calcassignment/http/host/path")
        );
        AppIndex.AppIndexApi.end(client, viewAction);
        client.disconnect();
    }//end onStop.

}//end MainActivity.
