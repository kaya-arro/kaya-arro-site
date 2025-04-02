function ffmpeg --wraps='set -gx SVT_LOG 1; ffmpeg -hide_banner -loglevel error'
    set -gx SVT_LOG 1
    command ffmpeg -loglevel error -hide_banner $argv
end
