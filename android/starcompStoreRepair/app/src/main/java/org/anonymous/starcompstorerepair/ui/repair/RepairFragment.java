package org.anonymous.starcompstorerepair.ui.repair;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.support.v4.app.Fragment;
import android.arch.lifecycle.Observer;
import android.arch.lifecycle.ViewModelProviders;

import org.anonymous.starcompstorerepair.R;

public class RepairFragment extends Fragment {

    private RepairViewModel repairViewModel;

    public View onCreateView(@NonNull LayoutInflater inflater,
                             ViewGroup container, Bundle savedInstanceState) {
        repairViewModel =
                ViewModelProviders.of(this).get(RepairViewModel.class);
        View root = inflater.inflate(R.layout.fragment_repair, container, false);
        final TextView textView = root.findViewById(R.id.textView);
        repairViewModel.getText().observe(getViewLifecycleOwner(), new Observer<String>() {
            @Override
            public void onChanged(@Nullable String s) {
                textView.setText(s);
            }
        });
        return root;
    }

}
