package com.ucfsurveys.ucfsurveys;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

/**
 * Created by cwg93_000 on 6/2/2015.
 */
public class UCFSurveys extends Activity implements View.OnClickListener {

    Button getSurveyButton;
    @Override
    public void onClick(View v) {
        Intent i = new Intent(this,SurveySelection.class);
        startActivity(i);
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_ucfsurveys);

        getSurveyButton = (Button)findViewById(R.id.getSurveyButton);

        getSurveyButton.setOnClickListener(this);
    }

}
