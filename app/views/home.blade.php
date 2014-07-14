@extends('layout')

@section('content')

<div id="champion">
</div>


<div id="knockout-stage">
    <div class="container">

        <div id="final">
            <div class="up-lines">
                <div class="line"></div>
            </div>
            <div class="matches clearfix">
                <div class="match">
                    <div class=" @if (($final->goal1 + $final->extra1 + $final->pk1) > ($final->goal2 + $final->extra2 + $final->pk2))
                        {{ $final->team1 }}-style
                    @else
                        {{ $final->team2 }}-style
                    @endif ">
                        <div class="date">{{ date("jS M",strtotime($final->play_date)) }}</div>
                        <div class="flags clearfix">
                            <div class="flag-l"><div class="{{ $final->team1 }}-flag flag"></div></div>
                            <div class="goal"><p>{{ $final->goal1 + $final->extra1 }}</p></div>
                            <div class="score">-</div>
                            <div class="goal"><p>{{ $final->goal2 + $final->extra2 }}</p></div>
                            <div class="flag-r"><div class="{{ $final->team2 }}-flag flag"></div></div>
                        </div>
                        <div class="result clearfix">
                            <div class="team-l">{{ $final->team1 }}</div>
                            <div class="blank"></div>
                            <div class="team-r">{{ $final->team2 }}</div>
                        </div>
                        <div class="extra clearfix">
                            @if ($final->pk1 > 0 || $final->pk2 > 0)
                            PK ({{ $final->pk1 }} - {{ $final->pk2 }})
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="third">
            <div class="matches clearfix">
                <div class="blank"></div>
                <div class="up-line"><div class="line"></div></div>
                <div class="match">
                    <div class=" @if (($third->goal1 + $third->extra1 + $third->pk1) > ($third->goal2 + $third->extra2 + $third->pk2))
                        {{ $third->team1 }}-style
                    @else
                        {{ $third->team2 }}-style
                    @endif ">
                        <div class="date">{{ date("jS M",strtotime($third->play_date)) }}</div>
                        <div class="flags clearfix">
                            <div class="flag-l"><div class="{{ $third->team1 }}-flag flag"></div></div>
                            <div class="goal"><p>{{ $third->goal1 + $third->extra1 }}</p></div>
                            <div class="score">-</div>
                            <div class="goal"><p>{{ $third->goal2 + $third->extra2 }}</p></div>
                            <div class="flag-r"><div class="{{ $third->team2 }}-flag flag"></div></div>
                        </div>
                        <div class="result clearfix">
                            <div class="team-l">{{ $third->team1 }}</div>
                            <div class="blank"></div>
                            <div class="team-r">{{ $third->team2 }}</div>
                        </div>
                        <div class="extra clearfix">
                            @if ($third->pk1 > 0 || $third->pk2 > 0)
                            PK ({{ $third->pk1 }} - {{ $third->pk2 }})
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="semi">
            <div class="vs-lines">
                <div class="line"></div>
            </div>
            <div class="matches clearfix">
            @foreach ($semi as $match)
                <div class="match">
                    <div class=" @if (($match->goal1 + $match->extra1 + $match->pk1) > ($match->goal2 + $match->extra2 + $match->pk2))
                        {{ $match->team1 }}-style
                    @else
                        {{ $match->team2 }}-style
                    @endif ">
                        <div class="date">{{ date("jS M",strtotime($match->play_date)) }}</div>
                        <div class="flags clearfix">
                            <div class="flag-l"><div class="{{ $match->team1 }}-flag flag"></div></div>
                            <div class="goal"><p>{{ $match->goal1 + $match->extra1 }}</p></div>
                            <div class="score">-</div>
                            <div class="goal"><p>{{ $match->goal2 + $match->extra2 }}</p></div>
                            <div class="flag-r"><div class="{{ $match->team2 }}-flag flag"></div></div>
                        </div>
                        <div class="result clearfix">
                            <div class="team-l">{{ $match->team1 }}</div>
                            <div class="blank"></div>
                            <div class="team-r">{{ $match->team2 }}</div>
                        </div>
                        <div class="extra clearfix">
                            @if ($match->pk1 > 0 || $match->pk2 > 0)
                            PK ({{ $match->pk1 }} - {{ $match->pk2 }})
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

        <div id="quater">
            <div class="up-lines clearfix">
                <div><div class="line"></div></div>
                <div><div class="line"></div></div>
            </div>
            <div class="vs-lines clearfix">
                <div><div class="line"></div></div>
                <div><div class="line"></div></div>
            </div>
            <div class="matches clearfix">
            @foreach ($quarter as $match)
                <div class="match">
                    <div class=" @if (($match->goal1 + $match->extra1 + $match->pk1) > ($match->goal2 + $match->extra2 + $match->pk2))
                        {{ $match->team1 }}-style
                    @else
                        {{ $match->team2 }}-style
                    @endif ">
                        <div class="date">{{ date("jS M",strtotime($match->play_date)) }}</div>
                        <div class="flags clearfix">
                            <div class="flag-l"><div class="{{ $match->team1 }}-flag flag"></div></div>
                            <div class="goal"><p>{{ $match->goal1 + $match->extra1 }}</p></div>
                            <div class="score">-</div>
                            <div class="goal"><p>{{ $match->goal2 + $match->extra2 }}</p></div>
                            <div class="flag-r"><div class="{{ $match->team2 }}-flag flag"></div></div>
                        </div>
                        <div class="result clearfix">
                            <div class="team-l">{{ $match->team1 }}</div>
                            <div class="blank"></div>
                            <div class="team-r">{{ $match->team2 }}</div>
                        </div>
                        <div class="extra clearfix">
                            @if ($match->pk1 > 0 || $match->pk2 > 0)
                            PK ({{ $match->pk1 }} - {{ $match->pk2 }})
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

        <div id="round">
            <div class="up-lines clearfix">
                <div><div class="line"></div></div>
                <div><div class="line"></div></div>
                <div><div class="line"></div></div>
                <div><div class="line"></div></div>
            </div>
            <div class="vs-lines clearfix">
                <div><div class="line"></div></div>
                <div><div class="line"></div></div>
                <div><div class="line"></div></div>
                <div><div class="line"></div></div>
            </div>
            <div class="matches clearfix">
            @foreach ($round as $match)
                <div class="match">
                    <div class=" @if (($match->goal1 + $match->extra1 + $match->pk1) > ($match->goal2 + $match->extra2 + $match->pk2))
                        {{ $match->team1 }}-style
                    @else
                        {{ $match->team2 }}-style
                    @endif ">
                        <div class="date">{{ date("jS M",strtotime($match->play_date)) }}</div>
                        <div class="flags clearfix">
                            <div class="flag-l"><div class="{{ $match->team1 }}-flag flag"></div></div>
                            <div class="goal"><p>{{ $match->goal1 + $match->extra1 }}</p></div>
                            <div class="score">-</div>
                            <div class="goal"><p>{{ $match->goal2 + $match->extra2 }}</p></div>
                            <div class="flag-r"><div class="{{ $match->team2 }}-flag flag"></div></div>
                        </div>
                        <div class="result clearfix">
                            <div class="team-l">{{ $match->team1 }}</div>
                            <div class="blank"></div>
                            <div class="team-r">{{ $match->team2 }}</div>
                        </div>
                        <div class="extra clearfix">
                            @if ($match->pk1 > 0 || $match->pk2 > 0)
                            PK ({{ $match->pk1 }} - {{ $match->pk2 }})
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

        </div>

    </div>
</div>

<div id="group-stage">
    <div class="container clearfix">
    @foreach ($groups as $key => $group)
        <div class="group">
            <div class="{{$group['teams'][0]->code}}-style">
                <p class="group-name">Group <span>{{ $key }}</span></p>

                <div class="group-table">
                    <div class="row clearfix">
                        <div class="team-cell">TEAM</div>
                        <div class="cell">W</div>
                        <div class="cell">D</div>
                        <div class="cell">L</div>
                        <div class="cell">GF</div>
                        <div class="cell">GA</div>
                        <div class="cell">Pts</div>
                    </div>
                @foreach ($group['teams'] as $team)
                    <div class="row clearfix">
                        <div class="team-cell"><div class="{{$team->code}}-flag flag"></div><span>{{$team->code}}</span></div>
                        <div class="cell">{{$team->w}}</div>
                        <div class="cell">{{$team->d}}</div>
                        <div class="cell">{{$team->l}}</div>
                        <div class="cell">{{$team->gf}}</div>
                        <div class="cell">{{$team->ga}}</div>
                        <div class="cell">{{$team->w * 3 + $team->d}}</div>
                    </div>
                @endforeach
                </div>

                <div class="matches">
                @for ($i = 0; $i < count($group['matches']); $i+=2)
                    <div class="round">
                        <div class="match clearfix">
                            <div class="team-l"><p>{{$group['matches'][$i]->name1}}</p></div>
                            <div class="goal"><p>{{$group['matches'][$i]->goal1}}</p></div>
                            <div class="score">-</div>
                            <div class="goal"><p>{{$group['matches'][$i]->goal2}}</p></div>
                            <div class="team-r"><p>{{$group['matches'][$i]->name2}}</p></div>
                        </div>
                        <div class="match clearfix">
                            <div class="team-l"><p>{{$group['matches'][$i + 1]->name1}}</p></div>
                            <div class="goal"><p>{{$group['matches'][$i + 1]->goal1}}</p></div>
                            <div class="score">-</div>
                            <div class="goal"><p>{{$group['matches'][$i + 1]->goal2}}</p></div>
                            <div class="team-r"><p>{{$group['matches'][$i + 1]->name2}}</p></div>
                        </div>
                    </div>
                @endfor
                </div>

            </div>
        </div>
    @endforeach
    </div>

    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>

</div>


@stop