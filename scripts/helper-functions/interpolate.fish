function interpolate -a start end steps step -d 'interpolate START END STEPS STEP

Linearly interpolate from START to END running from step 0 (START) to step STEPS (END) and output the value at step STEP.'
  math $start + (math $step \* (math (math $end - $start) / $steps))
end
