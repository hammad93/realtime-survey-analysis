package com.ucfsurveys.ucfsurveys;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

/**
 * Created by cwg93_000 on 6/14/2015.
 */
public class TextQuestion extends Question {

    EditText answerText;

    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_text_question);
        Bundle extras = getIntent().getExtras();
        if(extras != null){
            String value = extras.getString(Intent.EXTRA_TEXT);
            questionText.setText(value);
        }
        questionText = (TextView)findViewById(R.id.QuestionText);
        nextButton = (Button)findViewById(R.id.nextButton);
        answerText = (EditText)findViewById(R.id.text_answer_box);
    }

    public void onClick(View v){

    }
}
