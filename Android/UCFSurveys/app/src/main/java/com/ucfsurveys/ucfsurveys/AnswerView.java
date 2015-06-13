package com.ucfsurveys.ucfsurveys;

import android.content.Context;
import android.view.View;
import android.widget.LinearLayout;
import android.widget.TextView;

import java.util.ArrayList;

/**
 * Created by cwg93_000 on 6/11/2015.
 */
public abstract class AnswerView extends LinearLayout{

    View answerView;

    public AnswerView(Context context) {
        super(context);

    }

    abstract void setAnswerView();


}
