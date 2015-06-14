package com.ucfsurveys.ucfsurveys;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;
import android.widget.TextView;

import java.util.ArrayList;

/**
 * Created by cwg93_000 on 6/14/2015.
 */
public class MultipleSelectionQuestion extends Question implements AdapterView.OnItemClickListener{

    ListView answerListView;
    ArrayAdapter mArrayAdapter;
    ArrayList<String> answerTextList;

    protected void onCreate(Bundle savedInstanceState){
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_multiple_selection_question);
        questionText = (TextView)findViewById(R.id.QuestionText);
        answerListView = (ListView)findViewById(R.id.answerList);
        nextButton = (Button)findViewById(R.id.nextButton);
        Bundle extras = getIntent().getExtras();
        if(extras != null){
            String value = extras.getString(Intent.EXTRA_TEXT);
            questionText.setText(value);
        }
        answerTextList = new ArrayList<String>();
        for (int i = 1; i <= 5; i++) {

            answerTextList.add("answer: " + i);
        }
        mArrayAdapter = new ArrayAdapter(this, android.R.layout.simple_list_item_multiple_choice,answerTextList);
        answerListView.setAdapter(mArrayAdapter);

        nextButton.setOnClickListener(this);
    }

    public void onClick(View v){
        Intent i = new Intent(this,TextQuestion.class);
        startActivity(i);
    }

    @Override
    public void onItemClick(AdapterView<?> parent, View view, int position, long id) {

    }
}
