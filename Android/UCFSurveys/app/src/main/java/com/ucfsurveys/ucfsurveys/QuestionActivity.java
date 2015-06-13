package com.ucfsurveys.ucfsurveys;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.TextView;


public class QuestionActivity extends Activity {
    TextView questionText;
    AnswerView answerView;
    AnswerViewFactory answerViewFactory;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_question);
        questionText = (TextView)findViewById(R.id.QuestionText);
        Bundle extras = getIntent().getExtras();
        if(extras != null){
            String value = extras.getString(Intent.EXTRA_TEXT);
            questionText.setText(value);
        }
        //answerViewFactory = new AnswerViewFactory(this,);
    }



}
