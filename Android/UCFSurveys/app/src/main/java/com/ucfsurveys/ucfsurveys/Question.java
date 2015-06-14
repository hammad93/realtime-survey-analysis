package com.ucfsurveys.ucfsurveys;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

/**
 * Created by cwg93_000 on 6/14/2015.
 */
public abstract class Question extends Activity implements View.OnClickListener{
    TextView questionText;
    Button nextButton;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
    }

    public abstract void onClick(View v);


}
